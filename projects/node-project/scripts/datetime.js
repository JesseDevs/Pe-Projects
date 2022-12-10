
import { DateTime } from "luxon";
const dt = DateTime.local(2017, 5, 15, 8, 30);
const now = dt.toLocaleString(DateTime.DATETIME_MED)

console.log(now)
