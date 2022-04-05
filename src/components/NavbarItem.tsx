export default function NavbarItem(props: {name: string, href: string}): JSX.Element {
    return <>
        <div className="text-2xl font-bold text-quaternary p-5 hover:text-primary hover:bg-quaternary rounded">
            <a href={props.href}>{props.name}</a> 
        </div>
    </>
}