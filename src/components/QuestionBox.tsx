import Box from "./Box";

export default function QuestionBox(props: {question: string, options: string[], values: string[], labels: string[], qName: string}): JSX.Element {
    const inputBody = <div className="text-left">
        {props.options.map((o, i) => {return <div key={o+i}>
                <input id={o} value={props.values[i]} name={props.qName} type="radio" />
                <label htmlFor={o}> {props.labels[i]}</label>
            </div>
        })}
        
    </div>
    console.log(inputBody)
    
    return <>
        <Box title={props.question} body={inputBody} link={""} />
    </>
}