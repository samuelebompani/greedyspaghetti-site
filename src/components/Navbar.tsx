import { useState } from "react";
import NavbarItem from "./NavbarItem";

export default function Navbar(): JSX.Element {
    
    const navbarItems = [["Home", "/"], ["Random", "/random"], /*["Videos", "/videos"],*/ ["About", "/about"]]
    const [isBMenuOpen,setIsBMenuOpen] = useState(false);
    const title = "Greedy Spaghetti"
    const colors = ["bg-primary", "bg-secondary", "bg-tertiary"]
    
    return <>
        <nav className="p-5 flex justify-between">
            
            <div><NavbarItem name={title} href="/"/></div>
            
            <div className="lg:flex hidden">
                {navbarItems.map(([i, h]) => {return <div key={i}><NavbarItem name={i} href={h}/></div>})}
            </div>
            <label htmlFor="menu-btn" className="block lg:hidden p-5 cursor-pointer" onClick={() => setIsBMenuOpen(!isBMenuOpen)}>
                <span id="menu-icon" className="material-icons text-rich_black text-2xl mt-1">
                    =
                </span>
            </label>
            
        </nav>
        <nav className={"p-10 justify-center "+(isBMenuOpen ? "flex lg:hidden" : "hidden")}>
            <div>
                {navbarItems.map(([i, h]) => {return <div key={i}><NavbarItem name={i} href={h}/></div>})}
            </div>
        </nav>
    </>
}