export default function NavbarItem(props: {name: string, href: string}): JSX.Element {
    return <>
        <div className="text-xl p-5 hover:text-purple-700">
            <a href={props.href}>{props.name}</a> 
        </div>
    </>
}