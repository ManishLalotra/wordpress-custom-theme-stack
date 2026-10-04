<?php
get_header();
?>
<main class="min-h-screen bg-slate-900 text-slate-100 py-12 px-6">
    <div class="max-w-4xl mx-auto space-y-6">
        <header class="border-b border-slate-800 pb-6">
            <h1 class="text-3xl font-extrabold text-white">Manish Enterprise WordPress Theme</h1>
            <p class="text-slate-400 mt-2">Engineered with Gutenberg block support, custom REST API endpoints, and hardened security profiles.</p>
        </header>

        <section class="bg-slate-800/60 p-6 rounded-xl border border-slate-700">
            <h2 class="text-xl font-bold text-white mb-2">REST API Status</h2>
            <p class="text-sm text-slate-300">Test the integrated diagnostics endpoint: <code class="bg-slate-900 px-2 py-1 rounded text-emerald-400">/wp-json/enterprise/v1/health</code></p>
        </section>
    </div>
</main>
<?php
get_footer();
