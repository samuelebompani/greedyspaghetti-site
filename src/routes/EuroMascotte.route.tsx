import Box from "../components/Box";
import QuestionBox from "../components/QuestionBox";

export default function EuroMascotte(): JSX.Element {
    
    return <>
        <div>
            <h1 className="text-rich_black">Che mascotte degli europei sei?</h1>
            <h2 className="text-rich_black">Ti sentiresti più a tuo agio nel morbido costume di Berni o tra i tunnel di Skillzy?</h2>
        </div>
        {/*
        <div className="grid md:grid-cols-2 grid-cols-1">
            <QuestionBox question={"Come ti definiresti?"} 
                options={["for", "mis", "s&e", "paz", "skill"]} values={["1"]} qName={"def"} 
                labels={["Fortunat*", "Misterios*", "Simpatic* ed entusiasta", "Pront* all'azione", "Skillat*"]} />
            <QuestionBox question={"Canzone preferita"} 
                options={["marsh","rig", "shaggy", "nanni", "tutto"]} values={[]} 
                labels={["Marshmello - Check this out (Mixed)", "Righeira - Vamos a la Playa", "Shaggy - Feel the rush", 
                    "Nanni Svampa - Se gh'hann de dì", '“Ascolto un po’ di tutto”']} qName={"song"} />
            <QuestionBox question={""} options={[]} values={[]} labels={[]} qName={""} />
        </div>*/}
        <div className="text-rich_black text-3xl">Al momento non disponibile :(</div>
    </>
}