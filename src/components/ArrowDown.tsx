export function ArrowDown(props: {className?: string}): JSX.Element {
    return <>
        <i className={"border-solid border-secondary border-r-4 border-b-4 rotate-45 inline-block p-2 hover:animate-pulse "+
            props.className} ></i>
    </>
}