<?php

$btn = $btn ?? [];
$label   = htmlspecialchars($btn['label']   ?? 'Button');
$variant = $btn['variant'] ?? 'primary';
$size    = $btn['size']    ?? 'md';
$href    = $btn['href']    ?? null;
$type    = $btn['type']    ?? 'button';
$id      = $btn['id']      ?? '';
$attrs   = $btn['attrs']   ?? '';
$icon    = $btn['icon']    ?? '';
$disabled = !empty($btn['disabled']);

// Size styles
$size_map = [
  'sm' => 'padding:.375rem .875rem;font-size:.8125rem;',
  'md' => 'padding:.5625rem 1.25rem;font-size:.875rem;',
  'lg' => 'padding:.75rem 1.75rem;font-size:1rem;',
];
$size_style = $size_map[$size] ?? $size_map['md'];

// Variant styles
$variant_map = [
  'primary'   => 'background:var(--color-primary);color:#fff;border:none;',
  'secondary' => 'background:transparent;color:var(--color-primary);border:1.5px solid var(--color-primary);',
  'ghost'     => 'background:transparent;color:var(--color-text-secondary);border:1.5px solid var(--color-border);',
  'danger'    => 'background:#DC2626;color:#fff;border:none;',
];
$variant_style = $variant_map[$variant] ?? $variant_map['primary'];

// Icons (inline SVG snippets)
$icon_map = [
  'search'   => '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>',
  'download' => '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4M7 10l5 5 5-5M12 15V3"/></svg>',
  'arrow'    => '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>',
  'plus'     => '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>',
  'filter'   => '<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/></svg>',
];
$icon_svg = $icon_map[$icon] ?? '';

$base_style = "display:inline-flex;align-items:center;gap:.5rem;border-radius:var(--radius-md);font-family:var(--font-body);font-weight:600;cursor:pointer;text-decoration:none;transition:opacity .15s ease,transform .15s ease;white-space:nowrap;" . $size_style . $variant_style;
$hover_js = 'onmouseover="this.style.opacity=\'0.88\'" onmouseout="this.style.opacity=\'1\'"';
$id_attr  = $id ? " id=\"$id\"" : '';
?>
<?php if ($href): ?>
  <a href="<?= htmlspecialchars($href) ?>"
     style="<?= $base_style ?>"
     <?= $hover_js ?>
     <?= $id_attr ?>
     <?= $attrs ?>
     <?= $disabled ? 'aria-disabled="true" tabindex="-1"' : '' ?>>
    <?= $icon_svg ?><?= $label ?>
  </a>
<?php else: ?>
  <button type="<?= htmlspecialchars($type) ?>"
          style="<?= $base_style ?>"
          <?= $hover_js ?>
          <?= $id_attr ?>
          <?= $attrs ?>
          <?= $disabled ? 'disabled' : '' ?>>
    <?= $icon_svg ?><?= $label ?>
  </button>
<?php endif; ?>
