import { useState } from "react";
import NavbarItem from "./NavbarItem";

export default function Navbar(): JSX.Element {
    
    const navbarItems = [["Home", "/"], ["Random", "/random"], /*["Videos", "/videos"],*/ ["About", "/about"]]
    const [isBMenuOpen,setIsBMenuOpen] = useState(false);
    const title = "Greedy Spaghetti"
    const colors = ["bg-primary", "bg-secondary", "bg-tertiary"]
    
    return <>
        <nav className="p-5 flex justify-between">
            <div className="flex flex-wrap">
                {title.split(" ").map((i, idx) => {return <div className="flex flex-wrap mx-2" key={idx}>
                    {i.split("").map((j, jdx) => {return <div className={"p-4 text-rich_black rounded-lg hover:animate-wiggle "+
                        " text-xl font-bold "+colors[(jdx + idx) % 3]}
                        key={idx+" "+jdx}>
                        {j}</div>})}
                    </div>})}    
            </div>
            
            <div className="lg:flex hidden">
                {navbarItems.map(([i, h]) => {return <div key={i}><NavbarItem name={i} href={h}/></div>})}
            </div>
            <label htmlFor="menu-btn" className="block lg:hidden p-5 cursor-pointer" onClick={() => setIsBMenuOpen(!isBMenuOpen)}>
                <span id="menu-icon" className="material-icons text-rich_black text-2xl mt-1">
                    menu
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