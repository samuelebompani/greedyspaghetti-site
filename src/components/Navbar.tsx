import { useState } from "react";
import NavbarItem from "./NavbarItem";

export default function Navbar(): JSX.Element {
    
    const navbarItems = [["Home", "/"], ["Random", "/random"], ["Videos", "/videos"], ["About", "/about"]]
    const [isBMenuOpen,setIsBMenuOpen] = useState(false);
    
    return <>
        <nav className="bg-primary p-5 flex justify-between">
            <div className="text-2xl md:text-4xl text-secondary font-bold p-5">
                Greedy Spaghetti
            </div>
            <div className="lg:flex hidden">
                {navbarItems.map(([i, h]) => {return <div key={i}><NavbarItem name={i} href={h}/></div>})}
            </div>
            <label htmlFor="menu-btn" className="block lg:hidden p-5 cursor-pointer" onClick={() => setIsBMenuOpen(!isBMenuOpen)}>
                <span id="menu-icon" className="material-icons text-secondary text-2xl mt-1">
                    menu
                </span>
            </label>
            
        </nav>
        <nav className={"bg-primary p-10 justify-center "+(isBMenuOpen ? "flex lg:hidden" : "hidden")}>
            <div>
                {navbarItems.map(([i, h]) => {return <div key={i}><NavbarItem name={i} href={h}/></div>})}
            </div>
        </nav>
    </>
}