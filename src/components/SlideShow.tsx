import { useState } from "react"
import Box from "./Box"

export default function SlideShow(props: {slides: JSX.Element[]}): JSX.Element {
    const [iterator, setIterator] = useState<boolean[]>(props.slides.map((_) => {return false}))

    function incrementIterator(i: number) {
        var tmp = iterator
        tmp[i] = false
        tmp[i < (props.slides.length - 1) ? i+1 : 0] = true
    }

    return <>
        <div className="grid">
            <div className="flex">
                <Box title={"G"} body={undefined} link={""} version={0} hover={true}/>
                <Box title={"R"} body={undefined} link={""} version={1} hover={true}/>
                <Box title={"E"} body={undefined} link={""} hover={true}/>
                <Box title={"E"} body={undefined} link={""} version={0} hover={true}/>
                <Box title={"D"} body={undefined} link={""} version={1} hover={true}/>
                <Box title={"Y"} body={undefined} link={""} hover={true}/>
            </div>
            <div className="flex">
                <Box title={"S"} body={undefined} link={""} version={1} hover={true}/>
                <Box title={"P"} body={undefined} link={""} version={2} hover={true}/>
                <Box title={"A"} body={undefined} link={""} version={0} hover={true}/>
                <Box title={"G"} body={undefined} link={""} version={1} hover={true}/>
                <Box title={"H"} body={undefined} link={""} version={2} hover={true}/>
                <Box title={"E"} body={undefined} link={""} version={0} hover={true}/>
                <Box title={"T"} body={undefined} link={""} version={1} hover={true}/>
                <Box title={"T"} body={undefined} link={""} version={2} hover={true}/>
                <Box title={"I"} body={undefined} link={""} version={0} hover={true}/>
            </div>
        </div>
        
        
    </>
}