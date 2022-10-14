import { Link } from "react-router-dom";

export default function GSButton(props: {label: string, onClick?: any}) : JSX.Element {
    const oc = props.onClick ? props.onClick : ""
    return <>
        <Link to={oc}>
            <div className="border-solid border-2 border-rich_black rounded-md bg-rich_black border-t-0 border-l-0">
                <div className="border-solid border-2 border-rich_black rounded-md bg-primary font-bold hover:animate-wiggle
                     hover:bg-quaternary px-4 py-1">
                    {props.label}</div>
            </div>
            
        </Link>
    </>
}