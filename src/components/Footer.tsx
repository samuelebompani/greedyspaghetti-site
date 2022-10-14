export default function Footer(props: {text: string}): JSX.Element {
    return <>
        <div className="border-rich_black border-b-4 border-r-4 border-solid bg-rich_black mt-10 mb-4 rounded-md">
            <div className="text-rich_black bottom-0  px-5 border-rich_black border-2 border-solid 
                bg-primary rounded-md font-bold py-1" >
                {props.text}
            </div>
        </div>
    </>
}