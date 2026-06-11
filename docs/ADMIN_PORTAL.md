# EGL Administrator Portal

The administrator portal is available at `/admin`.

## First production setup

Run these commands from the deployed application directory:

```bash
php artisan migrate --force
php artisan db:seed --class=SiteSettingSeeder --force
php artisan admin:create
php artisan optimize
```

Do not seed or commit an administrator password. The `admin:create` command validates a strong password and creates the first owner account interactively.

## Roles

- **Owner:** full access, including website settings, administrator accounts, and permanent inquiry deletion.
- **Editor:** dashboard, analytics, inquiries, activity log, and personal security settings.

## Scheduled task

The analytics retention command is scheduled daily. Ensure Laravel's scheduler runs every minute:

```cron
* * * * * cd /path/to/website && php artisan schedule:run >> /dev/null 2>&1
```

## Security and privacy

- Login attempts are rate limited.
- Two-factor authentication is available under **Profile & Security**.
- Password reset links expire after 30 minutes.
- Visitor IP addresses are irreversibly hashed before storage.
- Old analytics are deleted according to the retention period in **Website Settings**.
- Inquiry submissions are validated, rate limited, protected by a honeypot and minimum completion time, and stored before email delivery.

## Useful commands

```bash
php artisan admin:create
php artisan analytics:prune
php artisan schedule:list
```
