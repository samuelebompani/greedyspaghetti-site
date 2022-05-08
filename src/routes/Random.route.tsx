import Box from "../components/Box";
import GsIFrame from "../components/GsIFrame";

export default function RandomRoute(): JSX.Element {

    function randHex() {
        return Math.floor(Math.random()*16).toString(16)+Math.floor(Math.random()*16).toString(16)+Math.floor(Math.random()*16).toString(16)+
            Math.floor(Math.random()*16).toString(16)+Math.floor(Math.random()*16).toString(16)+Math.floor(Math.random()*16).toString(16)
    }
    
    const brianzaBody = <GsIFrame 
        src={"https://www.openstreetmap.org/export/embed.html?bbox=9."+
                Math.floor(Math.random()*(44650-12000)+12000)+"%2C45."+
                Math.floor(Math.random()*(79500-61070)+61070)+"&amp;layer=mapnik"} />

    const wolframBody =
            <GsIFrame className="bg-white"
                src={"https://tones.wolfram.com/generate"} />

    const attackBody = <GsIFrame className="bg-white p-5"
            src={"https://www.sofascore.com/event/"+
                Math.floor(Math.random()*(8888888-1000000)+1000000)+"/attack-momentum/embed"} />
    
    return <>
        <div className="grid md:grid-cols-2 grid-cols-1">
            <Box title={"Random Place in Brianza"} body={brianzaBody} link={""} />
            <Box title={'Random "Attack Momentum"'} body={attackBody} link={""} />
        </div>
        <div className="grid md:grid-cols-2 grid-cols-1">
            <Box title={"Random Wolfram Tone"} body={wolframBody} link={""} />
            <Box title={""} body={""} link={""} />
        </div>
    </>
}