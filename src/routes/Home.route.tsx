import { useState } from "react";
import Box from "../components/Box";
import SlideShow from "../components/SlideShow";

export default function HomeRoute(): JSX.Element {

    //const bodyBip = "A tool to generate unsecure mnemonic keys for crypto wallets. It is developed with JavaScript."
    //const bodyXg = "Collection of xgs data of the Euro 2020 tournament. Unavailable at the moment."
    const bodyEC = <>If you need to count something, here's your app. Download available in the Play Store</>
    const bodyEuroT = "Ti sentiresti più a tuo agio nel morbido costume di Berni o tra i tunnel di Skillzy? " +
        "Scopri che mascotte degli europei sei. (Italian only)"
    
    const slides = [
        <Box title="Easy Counter" body={bodyEC} link="https://play.google.com/store/apps/details?id=com.easy.counter" hover={true} />,
        <Box title="Euro Mascotte test" body={bodyEuroT} link="/euro-mascotte" hover={true} />,
        <Box title="Easy Counter" body={bodyEC} link="https://play.google.com/store/apps/details?id=com.easy.counter" hover={true} />,
        <Box title="Euro Mascotte test" body={bodyEuroT} link="/euro-mascotte" hover={true} />,
        <Box title="Random things" body="" link="/random" hover={true} />
    ]
    

    return <>
        <Box title="Warning" body={"The site is currently under deployment. New pages and features will be available soon."} link="/bip39" version={2}/>
        <div className="grid md:grid-cols-2 grid-cols-1">
            <Box title="Random" body={"Some unusual uses of random functions"} link="/random" version={1}/>
            <Box title="Easy Counter" body={bodyEC} link="https://play.google.com/store/apps/details?id=com.easy.counter" version={0}/>,
        </div>
        {/*
        <div className="grid md:grid-cols-2 grid-cols-1">
            <Box title="Bip 39" body={"bodyBip"} link="/bip39" version={0}/>
            <Box title="XGs Euro 2020" body={"bodyXg"} link="" version={1}/>
        </div>
        *}
        {/*<div className="flex mt-5">
            <div className="flex xl:mx-20 lg:mx-10 mx-5">
                <SlideShow slides={slides} />
            </div>
    </div>*/}
        
        
    </>
}