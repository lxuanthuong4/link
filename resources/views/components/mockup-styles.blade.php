<div id="mockup-styles" class="flex items-center gap-3">
    <label for="style-select" class="text-sm font-medium text-gray-700">Mockup style</label>
    <select id="style-select" class="border rounded-md p-2 text-sm">
        <option value="bg-gradient-to-br from-slate-900 to-slate-800">Style 1 — Dark Gradient</option>
        <option value="bg-gradient-to-br from-blue-900 via-indigo-800 to-indigo-600">Style 2 — Indigo</option>
        <option value="bg-gradient-to-br from-emerald-900 via-emerald-700 to-emerald-500">Style 3 — Emerald</option>
        <option value="bg-black ring-1 ring-gray-700" selected>Style 4 — Black</option>
    </select>

    <script>
    (function() {
        function applyStyleString(el, styleString) {
            if (!el) return;
            const prev = el.dataset.appliedStyle;
            if (prev) {
                prev.split(' ').filter(Boolean).forEach(c => el.classList.remove(c));
            }
            styleString.split(' ').filter(Boolean).forEach(c => el.classList.add(c));
            el.dataset.appliedStyle = styleString;
        }

        function applyToAll(styleString) {
            document.querySelectorAll('.phone-mockup').forEach(pm => applyStyleString(pm, styleString));
            // store inner style placeholder if needed
            document.querySelectorAll('#preview-content, #second-preview-content').forEach(pc => {
                pc.dataset.appliedInnerStyle = '';
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            const select = document.getElementById('style-select');
            if (select) {
                select.addEventListener('change', function() {
                    applyToAll(this.value || '');
                });
                // apply initial value
                if (select.value) applyToAll(select.value);
            }
        });
    })();
    </script>
</div>