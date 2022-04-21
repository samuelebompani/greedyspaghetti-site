import Box from "../components/Box";

export default function HomeRoute(): JSX.Element {

    const bodyBip = "A tool to generate unsecure mnemonic for crypto wallets. It is developed with JavaScript."
    const bodyXg = "Collection of xgs data of the Euro 2020 tournament."
    const bodyEC = "If you need to count something, here's your app. Easy to use, easy to implement. "+
                    "Download available in the Play Store"
    const bodyEuroT = "Ti sentiresti più a tuo agio nel morbido costume di Berni o tra i tunnel di Skillzy? "+
                    "Scopri che mascotte degli europei sei. (Italian only)"
    return <>
        <div className="flex">
            <Box title="Bip 39" bodyText={bodyBip} link="" />
            <Box title="XGs Euro 2020" bodyText={bodyXg} link="" />
        </div>
        <div className="flex">
            <Box title="Easy Counter" bodyText={bodyEC} link="https://play.google.com/store/apps/details?id=com.easy.counter" />
            <Box title="Euro Mascotte test" bodyText={bodyEuroT} link="" />
        </div>
    </>
}