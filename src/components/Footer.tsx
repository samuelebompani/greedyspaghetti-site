export default function Footer(props: {text: string}): JSX.Element {
    return <>
        <div className="text-rich_black bottom-0 mt-10 px-5 mb-2" >
            {props.text}</div>
        </>
}