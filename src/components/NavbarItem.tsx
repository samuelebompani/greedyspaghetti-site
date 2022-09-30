export default function NavbarItem(props: {name: string, href: string}): JSX.Element {
    return <>
        <div className="text-3xl lg:text-2xl font-bold text-rich_black p-5 
                    hover:text-rich_black hover:bg-secondary rounded-2xl hover:animate-wiggle
                    cursor-pointer">
            <a href={props.href}>{props.name}</a> 
        </div>
    </>
}