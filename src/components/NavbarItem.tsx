export default function NavbarItem(props: {name: string, href: string}): JSX.Element {
    return <>
        <div className=" border-solid border-rich_black border-t-0 border-l-0 border-r-4 border-b-4 m-1 rounded-lg bg-rich_black">
            <a href={props.href}>
                <div className="text-3xl lg:text-2xl font-bold text-rich_black p-5 
                            hover:text-rich_black hover:bg-secondary rounded-md hover:animate-wiggle
                            cursor-pointer border-solid border-2 border-black bg-primary">
                    {props.name}
                </div>
            </a> 
        </div>
        
    </>
}