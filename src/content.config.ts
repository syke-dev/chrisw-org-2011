import { defineCollection } from 'astro:content';

import { glob, file } from 'astro/loaders';

import { z } from 'astro/zod';

const statsSchema = z.object({
	name: z.string(),
	icon: z.string(),
	hp: z.string(),
	str: z.string(),
	arm: z.string(),
	move: z.string(),
	fac: z.string(),
});

const unitStatsSchema = z.object({
	hp: z.string(),
	str: z.string(),
	arm: z.string(),
	move: z.string(),
	rng: z.string(),
});

const abilitySchema = z.object({
	name: z.string(),
	icon: z.string(),
	desc: z.string(),
	url: z.string(),
	img: z.string(),
	cool: z.string(),
	rng: z.string(),
});

const unitSchema = z.object({
	class: z.string(),
	stats: statsSchema,
	unitstats: unitStatsSchema,
	abilities: z.array(abilitySchema),
});

const bloodTideUnits = defineCollection({
	loader: glob({ pattern: ['*.json'], base: 'src/data/bloodtide/units' }),
	schema: unitSchema,
});

export const collections = { bloodTideUnits };