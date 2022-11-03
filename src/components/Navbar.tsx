import { useState } from "react";
import NavbarItem from "./NavbarItem";

export default function Navbar(): JSX.Element {
    
    const navbarItems = [["Home", "/"], ["Random", "/random"], /*["Videos", "/videos"],*/ ["About", "/about"]]
    const [isBMenuOpen,setIsBMenuOpen] = useState(false);
    const title = "Greedy Spaghetti"
    
    return <>
        <nav className="px-1 py-4 flex justify-between">
            
            <div><NavbarItem name={title} href="/"/></div>
            
            <div className="lg:flex hidden">
                {navbarItems.map(([i, h]) => {return <div key={i}><NavbarItem name={i} href={h}/></div>})}
            </div>
            <label htmlFor="menu-btn" className="block lg:hidden p-5 cursor-pointer" onClick={() => setIsBMenuOpen(!isBMenuOpen)}>
                
                <div className="grid content-center text-rich_black h-full ">
                    <span  className={"block h-1 w-8 bg-current transform transition duration-300 ease-in-out mb-1 "+
                            (isBMenuOpen ? "rotate-45 translate-y-[0.5rem]" : "")}></span>
                    <span  className={"block h-1 w-8 bg-current   transform transition ease-in-out "+
                            (isBMenuOpen ? " opacity-0 duration-300" : " duration-500 ")}></span>
                    <span className={"block h-1 w-8 bg-current transform  transition duration-300 ease-in-out mt-1 "+
                        (isBMenuOpen ? "rotate-[-45deg] translate-y-[-0.5rem]" : "")}></span>
                </div>
            </label>
            
        </nav>
        <nav className={"grid p-10 min-h-[85vh] content-center justify-center "+(isBMenuOpen ? "flex lg:hidden" : "hidden")}>
            <div>
                {navbarItems.map(([i, h]) => {return <div key={i}><NavbarItem name={i} href={h}/></div>})}
            </div>
        </nav>
    </>
}