import NavbarItem from "./NavbarItem";

export default function Navbar(): JSX.Element {
    
    const navbarItems = [["Home", "/"], ["Random", "#"], ["Videos", "#"], ["About", "about"]]
    
    return <>
        <nav className="bg-primary p-5 flex justify-between">
            <div className="text-4xl text-quaternary font-bold p-5">
                Greedy Spaghetti
            </div>
            <div className="lg:flex hidden">
                {navbarItems.map(([i, h]) => {return <div key={i}><NavbarItem name={i} href={h}/></div>})}
            </div>
            <input type="checkbox" id="menu-btn" className="hidden"/>
            <label htmlFor="menu-btn" className="block lg:hidden p-5">
                <span id="menu-icon" className="material-icons text-quaternary text-2xl">
                    menu
                </span>
            </label>
            
        </nav>
        <nav className="bg-primary h-full lg:hidden flex justify-center p-20">
            <div>
                {navbarItems.map(([i, h]) => {return <div key={i}><NavbarItem name={i} href={h}/></div>})}
            </div>
        </nav>
    </>
}