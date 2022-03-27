export default function Navbar(): JSX.Element {
    return <>
        <nav id="header" className="">
            <div className="text-xl text-black font-bold">
                Greedy Spaghetti
            </div>
            <ul id="menu">
                <li className="p-3"><a href="/">Home</a></li>
                <li><a href="#">Random</a></li>
                <li><a href="#">Videos</a></li>
                <li><a href="#">About</a></li>
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