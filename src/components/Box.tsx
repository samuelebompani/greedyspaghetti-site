
export default function Box(props: {title: string, body: any, link: string}): JSX.Element {
    return <>
        <a href={props.link}>
            <div className="m-2">
                <div className="p-10 bg-primary border-4 border-secondary m-0 hover:bg-secondary hover:text-primary
                        text-secondary rounded-xl cursor-pointer w-full float-left">
                    <div className="font-bold text-3xl">{props.title}</div>
                    <div className="text-2xl mt-10">
                        {props.body}
                    </div>
                </div>
            </div>
        </a>
    </>
}