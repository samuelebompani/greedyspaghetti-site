import NavbarItem from "./NavbarItem";

export default function Navbar(): JSX.Element {
    
    const navbarItems = [["Home", "/"], ["Random", "#"], ["Videos", "#"], ["About", "about"]]
    
    return <>
        <nav className="bg-purple-700 p-4 flex">
            <div className="text-xl text-black font-bold">
                Greedy Spaghetti
            </div>
            <div className="lg:flex sm:hidden">
                {navbarItems.map(([i, h]) => {return <div key={i}><NavbarItem name={i} href={h}/></div>})}
            </div>
            <input type="checkbox" id="menu-btn"/>
            <label htmlFor="menu-btn"    className="md:block lg:hidden">
                <span id="menu-icon" className="material-icons">
                    menu
                </span>
            </label>
            
        </nav>
        <nav className="bg-purple-700 w-full h-full lg:hidden md:block fixed">
            <div>
                {navbarItems.map(([i, h]) => {return <div key={i}><NavbarItem name={i} href={h}/></div>})}
            </div>
        </nav>
    </>
}