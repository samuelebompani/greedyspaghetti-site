import NavbarItem from "./NavbarItem";

export default function Navbar(): JSX.Element {
    
    const navbarItems = [["Home", "/"], ["Random", "#"], ["Videos", "#"], ["About", "about"]]
    
    return <>
        <nav className="bg-purple-700 p-4 flex">
            <div className="text-xl text-black font-bold">
                Greedy Spaghetti
            </div>
            <ul className="flex">
                {navbarItems.map(([i, h]) => {return <NavbarItem name={i} href={h}/>})}
            </ul>
            <input type="checkbox" id="menu-btn"/>
            <label htmlFor="menu-btn" id="label" className="md:block">
                <span id="menu-icon" className="material-icons">
                    menu
                </span>
            </label>
            <nav id="mobile-menu" className="">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="#">Random</a></li>
                    <li><a href="#">Videos</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </nav>
        </nav>
    </>
}