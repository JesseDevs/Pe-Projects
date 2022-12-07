import something from './module.js';

import { basename, dirname } from "node:path";
import { fileURLToPath } from "node:url";
import showFile from './module.js';

const __filename = fileURLToPath(import.meta.url);
const __dirname = dirname(__filename);

const filename = basename(__filename);

showFile(filename, __dirname);
