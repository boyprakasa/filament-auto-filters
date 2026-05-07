# Changelog

All notable changes to `ptplugins/filament-auto-filters` are documented here.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/) and this project adheres to [Semantic Versioning](https://semver.org/).

## [1.0.1] - 2026-05-07

### Changed
- Added `filament-hidden` class to the README hero image so it doesn't duplicate the listing banner on the filamentphp.com plugin page. The image still renders normally on GitHub.

## [1.0.0] - 2026-05-04

### Added
- Initial release.
- `HasAutoFilters` trait for Filament Resource classes.
- `static::autoFilters($table, overrides: [], skip: [])` — generates filters from the table's column definitions.
- Auto-detection rules:
  - `TextColumn` (date / datetime via Filament's `isDate()` / `isDateTime()`) → date range picker (from / until)
  - `TextColumn` (default) → text search (`LIKE %...%`)
  - `IconColumn->boolean()` → ternary (Yes / No / All)
  - `SelectColumn` with `->options([...])` → select filter using the same options
  - Dot-notation `rel.col` → `whereRelation()` query
  - Dot-notation `data.X` → JSON arrow query (`data->X`)
- Helpers exposed for manual use:
  - `makeTextFilter(name, label)` — text search filter
  - `makeDateRangeFilter(name, label)` — date range filter
  - `makeSelectFilter(name, label, options)` — select filter
  - `makeTernaryFilter(name, label)` — ternary boolean filter
  - `resolveColumn(name)` — column → query metadata resolver
- Single codebase across **Filament 3, 4, and 5** — same trait, same API. All filter / form / column classes used by the trait exist in identical namespaces across versions.
- Publishable config (`auto-filters.php`) for date format, select multi/searchable defaults, and search input placeholder.
