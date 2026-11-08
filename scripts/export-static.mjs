import { cp, mkdir, readFile, rm, writeFile } from 'node:fs/promises';
import { fileURLToPath } from 'node:url';
import path from 'node:path';

const projectRoot = path.resolve(path.dirname(fileURLToPath(import.meta.url)), '..');
const outputDir = path.join(projectRoot, 'vercel-static');
const templatePath = path.join(projectRoot, 'resources', 'views', 'portfolio.blade.php');

let html = await readFile(templatePath, 'utf8');

// Resolve the one Blade conditional used by the portfolio: the personal photo
// exists in public/images, so the generated static page uses that same photo.
html = html.replace(
    /@if \(file_exists\(public_path\('images\/Foto pribadi\.jpeg'\)\)\)([\s\S]*?)@else[\s\S]*?@endif/,
    (_match, photoBranch) => photoBranch,
);

html = html
    .replaceAll("{{ asset('css/portfolio.css') }}", '/css/portfolio.css')
    .replaceAll("{{ asset('css/portfolio-extra.css') }}", '/css/portfolio-extra.css')
    .replaceAll("{{ asset('js/portfolio.js') }}", '/js/portfolio.js')
    .replaceAll("{{ asset('images/Foto%20pribadi.jpeg') }}", '/images/Foto%20pribadi.jpeg')
    .replaceAll("{{ asset('images/applied-informatics-preview.png') }}", '/images/applied-informatics-preview.png')
    .replaceAll("{{ asset('images/banana-grading-splash.png') }}", '/images/banana-grading-splash.png')
    .replaceAll("{{ asset('images/banana-grading-guide.png') }}", '/images/banana-grading-guide.png')
    .replaceAll("{{ asset('images/ternak-lele-beranda.png') }}", '/images/ternak-lele-beranda.png')
    .replaceAll("{{ asset('images/ternak-lele-katalog.png') }}", '/images/ternak-lele-katalog.png');

if (html.includes('{{') || /@(?:if|else|endif)\b/.test(html)) {
    throw new Error('Masih ada sintaks Blade yang belum dikonversi ke HTML statis.');
}

await rm(outputDir, { recursive: true, force: true });
await mkdir(outputDir, { recursive: true });
await writeFile(path.join(outputDir, 'index.html'), html, 'utf8');
await cp(path.join(projectRoot, 'public', 'css'), path.join(outputDir, 'css'), { recursive: true });
await cp(path.join(projectRoot, 'public', 'js'), path.join(outputDir, 'js'), { recursive: true });
await cp(path.join(projectRoot, 'public', 'images'), path.join(outputDir, 'images'), { recursive: true });

console.log(`Versi statis siap di ${path.relative(projectRoot, outputDir)}`);
