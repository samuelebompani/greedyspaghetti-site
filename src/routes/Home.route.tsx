import { ArrowDown } from "../components/ArrowDown";
import Box from "../components/Box";

export default function HomeRoute(): JSX.Element {

    //const bodyBip = "A tool to generate unsecure mnemonic for crypto wallets. It is developed with JavaScript."
    //const bodyXg = "Collection of xgs data of the Euro 2020 tournament. Unavailable at the moment."
    const bodyEC = "If you need to count something, here's your app. Easy to use, easy to implement. " +
        "Download available in the Play Store"
    const bodyEuroT = "Ti sentiresti più a tuo agio nel morbido costume di Berni o tra i tunnel di Skillzy? " +
        "Scopri che mascotte degli europei sei. (Italian only)"
    return <>
        {/*<div className="grid md:grid-cols-2 grid-cols-1">
            <Box title="Bip 39" body={bodyBip} link="" hover={true}/>
            <Box title="XGs Euro 2020" body={bodyXg} link="" hover={true}/>
        </div>*/}
        <div className="grid md:grid-cols-4 grid-cols-1 mt-5">
            <div></div>
            <div className="grid col-span-2 grid-cols-1">
                <div><ArrowDown className="my-10"/></div>
                <Box title="Easy Counter" body={bodyEC} link="https://play.google.com/store/apps/details?id=com.easy.counter" hover={true} />
                <div><ArrowDown className="my-10"/></div>
                <Box title="Euro Mascotte test" body={bodyEuroT} link="/euro-mascotte" hover={true} />
                <div><ArrowDown className="my-10"/></div>
                <Box title="Random things" body="" link="/random" hover={true} />
            </div>
            <div></div>
        </div>
    </>
}