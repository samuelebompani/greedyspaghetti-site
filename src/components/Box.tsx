export default function Box(props: {title: String, bodyText: String, link: String}): JSX.Element {
    return <>
        <div className="p-10 bg-primary border-2 border-secondary w-1/2 m-2 hover:bg-secondary hover:text-primary
                text-secondary rounded-xl"
                >
            <div className="font-bold text-3xl text-quaternary">{props.title}</div>
            <div className="text-2xl mt-10">
                {props.bodyText}
            </div>
        </div>
        
    </>
}