import Box from "../components/Box";
import gitImg from "../media/GitHub-Mark-Light-120px-plus.png"

export default function AboutRoute(): JSX.Element {

    const gitBody = <div className="grid justify-items-center">
        <img src={gitImg} alt="git logo"/>
    </div>
    const emailBody = <div className="grid justify-items-center text-md">
        samuele@greedyspaghetti.com
    </div>
    return <>
        <div className="grid md:grid-cols-1">
            <Box title={"My Github"} body={gitBody} link={"https://github.com/samuelebompani"} />
            <Box title={"Contacts"} body={emailBody} link={"mailto:samuele@greedyspaghetti.com"}/>
        </div>
    </>
}