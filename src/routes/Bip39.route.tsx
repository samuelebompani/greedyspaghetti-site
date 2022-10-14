import Box from "../components/Box";
import GSButton from "../components/GSButton";

export default function Bip39Route() : JSX.Element {
    function IntToHexString(integer : number) {
        return Number(integer).toString(16).padStart(2,'0');
    }

    function HexToBin(hexString : string) {
        return parseInt(hexString, 16).toString(2).padStart(8,'0')
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

    async function Entropy() {
        var strength = 128;
        var buffer = new Uint8Array(strength/8);
        var data = window.crypto.getRandomValues(buffer);
        var hexs = "";
        var bins = "";
        var bb = [];
        
        for(var i in data){
            var hex = IntToHexString(data[i]);
            hexs += hex;
            bins += HexToBin(hex);
            bb.push(HexToBin(hex));
        }
        var ids=[];
        //for (var i=0; i<11; i++){
        //    var uu = bins.slice(11*i,11*(i+1));
        //    ids.push(parseInt(uu, 2));
        //}
        //var last = bins.slice(121,129);
        //var hash = await Sha256(HexStringToByte(hexs));
        //var checksum = HexToBin(hash[0]).slice(4,9);
        //var last = last+checksum;
        //var lastIdx = parseInt(last, 2);
        //ids.push(lastIdx);

        let reader = new FileReader();
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
                1234567890
            </div>} link={""} version={1}/>
    </>
}