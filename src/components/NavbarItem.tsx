export default function NavbarItem(props: {name: string, href: string}): JSX.Element {
    return <>
        <div className="text-3xl lg:text-2xl font-bold text-secondary p-5 
                    hover:text-primary hover:bg-secondary rounded-2xl">
            <a href={props.href}>{props.name}</a> 
        </div>
    </>
}