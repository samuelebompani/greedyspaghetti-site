
export default function Box(props: {title: string, body?: any, link: string, hover?: boolean, className?: string
                                    version?: number}): JSX.Element {
    
    var bg
    var hover
    switch(props.version) {
        case 0:
            bg="bg-secondary"
            hover="bg-tertiary"
            break
        case 1:
            bg="bg-tertiary"
            hover="bg-primary"
            break
        default:
            bg="bg-primary"
            hover="bg-secondary"
    }
    return <>
        <div className="rounded-lg border-solid border-rich_black border-t-0 border-left-0 border-b-4 border-r-4 bg-rich_black m-2">
            <a href={props.link} >
                <div className={"h-full "+(props.hover ? "hover:animate-wiggle" : "")}>
                    <div className={"p-10 m-0 border-solid border-rich_black border-2 h-full "+bg+
                            " text-rich_black rounded-lg w-full float-left "+
                            (props.hover ? "hover:text-rich_black cursor-pointer hover:"+hover : "")+
                            (props.className)}>
                        <div className="font-bold text-3xl">{props.title}</div>
                        {props.body ? <div className="text-2xl mt-10">
                            {props.body}
                        </div> : <></>}
                    </div>
                </div>
            </a>
        </div>
        
    </>
}