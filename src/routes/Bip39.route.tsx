import Box from "../components/Box";
import GSButton from "../components/GSButton";

export default function Bip39Route() : JSX.Element {
    function IntToHexString(integer : number) {
        return Number(integer).toString(16).padStart(2,'0').toUpperCase();
    }

    function HexToBin(hexString : string) {
        return parseInt(hexString, 16).toString(2).padStart(8,'0')
    }

    function array2Print(array: any[]) {
        return <div className="flex w-full flex-wrap">
            {array.map((i) => {return <div className="grow">{i}</div>})}
        </div>
        
    }

    function HexStringToByte(str : string) {
        if (!str) {
            return new Uint8Array();
        }
    
        var a = [];
        for (var i = 0, len = str.length; i < len; i+=2) {
            a.push(parseInt(str.substr(i,2),16));
        }
    
        return new Uint8Array(a);
    }

    async function Sha256(message : BufferSource) {
        const hashBuffer = await window.crypto.subtle.digest('SHA-256', message);
        const hashArray = Array.from(new Uint8Array(hashBuffer));
        const hashHex = hashArray.map(b => ('00' + b.toString(16)).slice(-2)).join('');
        return hashHex;
    }

    function printLine(tag : string, value : string) {
        return "<li><b>"+tag+"</b>: "+value+"</li>";
    }

    function printArray(array : any[], sep: number) {
        var res="";
        /*for (i in array) {
            res+=array[i]+sep
        }*/
        return array;
    }

    function LabelAndData(props: {label: string, data: any}) : JSX.Element {
        return <>
            <div className="font-bold py-2">{props.label}</div>
            <div className="text-sm">{props.data}</div>
        </>
    }

    function Entropy() : JSX.Element {
        var strength = 128;
        var buffer = new Uint8Array(strength/8);
        var data = window.crypto.getRandomValues(buffer);
        var hexs : string[]= []
        var bins = [];
        var bb = [];
        
        for(var i in data){
            var hex = IntToHexString(data[i]);
            hexs.push(hex);
            bins.push(HexToBin(hex));
            bb.push(HexToBin(hex));
        }
        var ids=[];
        
        for (var j=0; j<11; j++){
            var uu = bins.slice(11*j,11*(j+1));
            console.log(uu)
            //ids.push(parseInt(uu, 2));
        }
        var last = bins.slice(121,129);
        //var hash = await Sha256(HexStringToByte(hexs));
        //var checksum = HexToBin(hash[0]).slice(4,9);
        //var last = last+checksum;
        //var lastIdx = parseInt(last, 2);
        //ids.push(lastIdx);

        //let reader = new FileReader();

        return <>
            <LabelAndData label="Random values" data={array2Print(Array.from(data))}/>
            <LabelAndData label="Hexadecimal" data={array2Print(hexs)}/>
            <LabelAndData label="Binary" data={array2Print(bins)}/>
            <LabelAndData label="Binary" data={array2Print(bb)}/>
        </>
    }
    return <>
        <Box title={"Bip39"} body={
            <div className="grid justify-items-center">
                <div className="mb-4">
                    A Tool to generate a mnemonic wallet. Strength: 128
                </div>
                <GSButton label="New" onClick={() => {}}/>
            </div>
            } link={""} version={0}/>
        <Box title={""} body={
            <div>
                <Entropy />
            </div>} link={""} version={1}/>
    </>
}