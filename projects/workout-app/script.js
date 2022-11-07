import WorkoutApp from "./workoutapp.js";

const workoutApp = new WorkoutApp("Workouts");


// var chart = JSC.chart('chartDiv', {
//     debug: true,
//     type: 'line',
//     legend_visible: false,
//     xAxis: {
//         crosshair_enabled: true,
//         scale: { type: 'time' }
//     },
//     yAxis: {
//         orientation: 'opposite',
//         formatString: 'c'
//     },
//     defaultSeries: {
//         firstPoint_label_text: '<b>%seriesName</b>',
//         defaultPoint_marker: {
//             type: 'circle',
//             size: 8,
//             fill: 'white',
//             outline: { width: 2, color: 'currentColor' }
//         }
//     },
//     title_label_text: 'Costs (Last 6 Months)',
//     series: [
//         {
//             name: 'Chest',
//             points: [
//                 ['1/1/2020', 29.9],
//                 ['2/1/2020', 97.5],
//                 ['3/1/2020', 110.4],
//                 ['4/1/2020', 129.2],
//                 ['5/1/2020', 144.0],
//                 ['6/1/2020', 176.0]
//             ]
//         },
//         {
//             name: 'Back',
//             points: [
//                 ['1/1/2020', 86.9],
//                 ['2/1/2020', 79.5],
//                 ['3/1/2020', 95.4],
//                 ['4/1/2020', 97.2],
//                 ['5/1/2020', 123.0],
//                 ['6/1/2020', 111.0]
//             ]
//         },
//         {
//             name: 'Legs',
//             points: [
//                 ['1/1/2020', 129.9],
//                 ['2/1/2020', 111.5],
//                 ['3/1/2020', 66.4],
//                 ['4/1/2020', 29.2],
//                 ['5/1/2020', 88.0],
//                 ['6/1/2020', 102.0]
//             ]
//         },
//         {
//             name: 'Shoulders',
//             points: [
//                 ['1/1/2020', 56.9],
//                 ['2/1/2020', 56.5],
//                 ['3/1/2020', 56.4],
//                 ['4/1/2020', 56.2],
//                 ['5/1/2020', 75.0],
//                 ['6/1/2020', 56.0]
//             ]
//         },
//         {
//             name: 'Cardio',
//             points: [
//                 ['1/1/2020', 200],
//                 ['2/1/2020', 66.4],
//                 ['3/1/2020', 56.4],
//                 ['4/1/2020', 129.9],
//                 ['5/1/2020', 75.0],
//                 ['6/1/2020', 56.0]
//             ]
//         }
//     ]
// }); 