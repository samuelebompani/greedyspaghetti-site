export default function GsIFrame(props: {src: string, className?: string}): JSX.Element {
    return <>
        <iframe className={"w-full h-96 "+props.className}
            src={props.src} title={props.src}
        >

        </iframe>
    </>
}