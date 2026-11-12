# woac-report

Shipping unit for report.worldanimalchiro.com: the **WOAC Report Core** WordPress plugin (`woac-report-core`) plus Hostinger production configuration.

Provides:
- Default post block template on `post` post type for Madison's authoring workflow (intro, photo gallery, CTA button, References section).
- Reusable block pattern under category "Animal Chiropractic Collective" (`woac-reports`).
- Author-friendly Gutenberg defaults without altering the active Twenty Twenty-Five theme.

## Plugin Structure

```
src/wp-content/plugins/woac-report-core/
├── woac-report-core.php    # Plugin bootstrap & metadata
└── includes/
    ├── template.php        # Default block template for post post type
    └── patterns.php        # Gutenberg block pattern registration
```

## Deployment

Deploy to `report.worldanimalchiro.com` via Hostinger:
1. Upload `woac-report-core` directory to `wp-content/plugins/` on Hostinger.
2. Activate `woac-report-core/woac-report-core.php`.
