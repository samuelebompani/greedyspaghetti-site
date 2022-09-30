function getRandomIntInclusive(min: number, max: number): number {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1) + min); // The maximum is inclusive and the minimum is inclusive
  }
  

export default function Cards(): JSX.Element {

    function Card(props: {rotation: number}): JSX.Element {
        const a = [20,35,45][getRandomIntInclusive(0,2)]
        return (
            <div className={"bg-quaternary h-96 w-64 border-solid border-4 border-secondary rounded-xl "+
                "absolute rotate-"+a}>
                
            </div>)
    }
    const cards = [1,2,3]
    return <>
        <div className="flex justify-center place-items-center">
            {cards.map((i: any, idx: number) => {
                return <Card key={idx} rotation={i}/>
                })}
        </div>
        
    
    </>
}