// @ts-check
import { defineConfig } from 'astro/config';

import AutoImport from 'astro-auto-import';
import icon from "astro-icon";
import mdx from '@astrojs/mdx';
import { glob as tinyglobby } from 'tinyglobby';

const components = await tinyglobby(['src/components/**/*.astro', 'src/assets/**/*.astro'], { cwd: "." });
const autoLoadedComponents = components.map(item => "./" + item);

console.log("Auto importing components: ");
console.log(autoLoadedComponents);

// https://astro.build/config
export default defineConfig({
  image: {
    // Set to true to enable experimental responsive image support with defaults
    experimentalLayout: true, // TODO: Doesn't work?
    responsiveStyles: true,
    // Or, set a specific default layout
    layout: 'constrained',
  },
  integrations: [
    AutoImport({
      imports: autoLoadedComponents
    }),
    icon(),
    mdx()
  ],
  scopedStyleStrategy: 'where',
});
