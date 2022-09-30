
export default function Box(props: {title: string, body: any, link: string, hover?: boolean, className?: string
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
        <a href={props.link}>
            <div className={"m-2 "+(props.hover ? "hover:animate-wiggle" : "")}>
                <div className={"p-10 m-0 "+bg+
                        " text-rich_black rounded-xl w-full float-left "+
                        (props.hover ? "hover:text-rich_black cursor-pointer hover:"+hover : "")+
                        (props.className)}>
                    <div className="font-bold text-3xl">{props.title}</div>
                    <div className="text-2xl mt-10">
                        {props.body}
                    </div>
                </div>
            </div>
        </a>
    </>
}