import { Chart } from "react-google-charts"

function parseHour(s: string): string {
  return s.substring(11,16)
}

export default function SandBoxRoute():JSX.Element {
  
  /*const data = [
    ["day", "a", "b", "c", "d"],
    ["Mon", 20, 28, 38, 45],
    ["Tue", 31, 38, 55, 66],
    ["Wed", 50, 55, 77, 80],
    ["Thu", 50, 77, 66, 77],
    ["Fri", 15, 66, 22, 68],
    ["Sat", 22, 56, 32, 68],
    ["Sun", 15, 66, 22, 68],
  ]*/

  const j = [
  {'time': '2022-04-11T12:28:00Z',
  'interval': '1 minute',
  'token_id': 2,
  'open': '6.3',
  'high': '6.8',
  'close': '6.7',
  'low': '6.0',
  'volume': 2},
 {'time': '2022-04-11T12:29:00Z',
  'interval': '1 minute',
  'token_id': 2,
  'open': '6.6',
  'high': '6.7',
  'close': '6.7',
  'low': '6.4',
  'volume': 0},
 {'time': '2022-04-11T12:30:00Z',
  'interval': '1 minute',
  'token_id': 2,
  'open': '6.7',
  'high': '6.7',
  'close': '6.7',
  'low': '6.7',
  'volume': 0},
 {'time': '2022-04-11T12:31:00Z',
  'interval': '1 minute',
  'token_id': 2,
  'open': '6.7',
  'high': '6.7',
  'close': '6.7',
  'low': '6.7',
  'volume': 0},
 {'time': '2022-04-11T12:32:00Z',
  'interval': '1 minute',
  'token_id': 2,
  'open': '6.7',
  'high': '6.7',
  'close': '6.7',
  'low': '6.7',
  'volume': 0},
 {'time': '2022-04-11T12:33:00Z',
  'interval': '1 minute',
  'token_id': 2,
  'open': '6.7',
  'high': '6.7',
  'close': '6.7',
  'low': '6.7',
  'volume': 0},
 {'time': '2022-04-11T12:34:00Z',
  'interval': '1 minute',
  'token_id': 2,
  'open': '6.7',
  'high': '6.9',
  'close': '6.0',
  'low': '5.7',
  'volume': 1},
 {'time': '2022-04-11T12:35:00Z',
  'interval': '1 minute',
  'token_id': 2,
  'open': '6.3',
  'high': '6.9',
  'close': '6.9',
  'low': '6.0',
  'volume': 0},
 {'time': '2022-04-11T12:36:00Z',
  'interval': '1 minute',
  'token_id': 2,
  'open': '6.7',
  'high': '9.7',
  'close': '8.7',
  'low': '6.7',
  'volume': 0},
 {'time': '2022-04-11T12:37:00Z',
  'interval': '1 minute',
  'token_id': 2,
  'open': '6.7',
  'high': '6.9',
  'close': '5.7',
  'low': '3.2',
  'volume': 0}]
  
  const jj = j.map((i) => [parseHour(i['time']), parseFloat(i['low']), parseFloat(i['open']), parseFloat(i['close']), parseFloat(i['high'])])
  const ji = j.map((i) => [parseHour(i['time']), i['volume']])
  const jjj = [["name", "a", "b", "c", "d"], ...jj]
  const jii = [["name", "a"], ...ji]

  const options = {
    backgroundColor: '#01172F',
    legend: "none",
    height: 600,
    bar: { groupWidth: "100%" }, // Remove space between bars.
    candlestick: {
      fallingColor: { strokeWidth: 0, fill: "#a52714" }, // red
      risingColor: { strokeWidth: 0, fill: "#0f9d58" }, // green
    },
    hAxis: {
      format: 'short',
      baselineColor: 'white',
      gridLines : {
        color: 'red',
      },
    },
    vAxis: {
      
      baselineColor: 'white',
      gridLines : {
        color: 'red',
      },
    },
    tooltip: {trigger: 'selection'},
    selectionMode: 'multiple',
    aggregationTarget: 'category',
    animation : {
      duration: 1000,
      easing: 'out',
    },
    //vAxis: {minValue:0, maxValue:10}

  };
  return <>
      <div className="w-full h-full">
        <Chart 
          chartType='CandlestickChart'
          data={jjj}
          options={options}
        />
        <Chart
          chartType='ColumnChart'
          data={jii}
          options={options}
        />
      </div>
    </>

    
}