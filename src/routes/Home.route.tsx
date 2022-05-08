import Box  from "../components/Box";

export default function HomeRoute(): JSX.Element {

    const bodyBip = "A tool to generate unsecure mnemonic for crypto wallets. It is developed with JavaScript."
    const bodyXg = "Collection of xgs data of the Euro 2020 tournament."
    const bodyEC = "If you need to count something, here's your app. Easy to use, easy to implement. "+
                    "Download available in the Play Store"
    const bodyEuroT = "Ti sentiresti più a tuo agio nel morbido costume di Berni o tra i tunnel di Skillzy? "+
                    "Scopri che mascotte degli europei sei. (Italian only)"
    return <>
        <div className="grid md:grid-cols-2 grid-cols-1">
            <Box title="Bip 39" body={bodyBip} link=""></Box>
            <Box title="XGs Euro 2020" body={bodyXg} link="" />
        </div>
        <div className="grid md:grid-cols-2 grid-cols-1">
            <Box title="Easy Counter" body={bodyEC} link="https://play.google.com/store/apps/details?id=com.easy.counter" />
            <Box title="Euro Mascotte test" body={bodyEuroT} link="" />
        </div>
        
    </>
}