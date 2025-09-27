# AIIMS Deoghar - Vercel Deployment Guide

## ✅ Vercel Configuration Fixed

The build error has been resolved by:

1. **Fixed CSS imports** - Removed vendor directory dependencies during build
2. **Created `vercel.json`** - Proper Laravel configuration for Vercel
3. **Added `.vercelignore`** - Excludes unnecessary files from deployment

## 🚀 Deployment Steps

### 1. Environment Variables
Set these in your Vercel dashboard:

**Required:**
- `APP_KEY` - Generate with: `php artisan key:generate --show`
- `APP_ENV` - Set to `production`
- `APP_DEBUG` - Set to `false`
- `APP_URL` - Your Vercel domain (e.g., `https://your-app.vercel.app`)

**Database (choose one):**

**Option A: PlanetScale (MySQL)**
- `DB_CONNECTION` - `mysql`
- `DB_HOST` - Your PlanetScale host
- `DB_PORT` - `3306`
- `DB_DATABASE` - Your database name
- `DB_USERNAME` - Your username
- `DB_PASSWORD` - Your password

**Option B: Supabase (PostgreSQL)**
- `DB_CONNECTION` - `pgsql`
- `DB_HOST` - Your Supabase host
- `DB_PORT` - `5432`
- `DB_DATABASE` - Your database name
- `DB_USERNAME` - Your username
- `DB_PASSWORD` - Your password

**Option C: Vercel Postgres**
- `DB_CONNECTION` - `pgsql`
- `DB_HOST` - From Vercel dashboard
- `DB_PORT` - `5432`
- `DB_DATABASE` - From Vercel dashboard
- `DB_USERNAME` - From Vercel dashboard
- `DB_PASSWORD` - From Vercel dashboard

### 2. Deploy to Vercel

1. **Connect Repository:**
   - Go to [Vercel Dashboard](https://vercel.com/dashboard)
   - Click "New Project"
   - Import your GitHub repository

2. **Configure Build Settings:**
   - Framework Preset: **Other**
   - Build Command: `composer install --no-dev --optimize-autoloader && npm ci && npm run build`
   - Output Directory: `public`
   - Install Command: `composer install --no-dev --optimize-autoloader && npm ci`

3. **Set Environment Variables:**
   - Add all the environment variables listed above
   - Make sure to set `APP_KEY` to a secure random string

4. **Deploy:**
   - Click "Deploy"
   - Wait for the build to complete

### 3. Post-Deployment Setup

1. **Run Migrations:**
   - Go to your Vercel function logs
   - Run: `php artisan migrate --force`

2. **Seed Database (optional):**
   - Run: `php artisan db:seed --force`

3. **Clear Cache:**
   - Run: `php artisan config:cache`
   - Run: `php artisan route:cache`
   - Run: `php artisan view:cache`

## 🔧 Configuration Files

### `vercel.json`
```json
{
  "version": 2,
  "buildCommand": "composer install --no-dev --optimize-autoloader && npm ci && npm run build",
  "outputDirectory": "public",
  "installCommand": "composer install --no-dev --optimize-autoloader && npm ci",
  "builds": [
    {
      "src": "public/index.php",
      "use": "@vercel/php"
    }
  ],
  "routes": [
    {
      "src": "/(.*)",
      "dest": "public/index.php"
    }
  ],
  "functions": {
    "public/index.php": {
      "runtime": "vercel-php@0.6.0"
    }
  },
  "env": {
    "APP_ENV": "production",
    "APP_DEBUG": "false"
  }
}
```

### `.vercelignore`
```
# Development files
.env
.env.local
.env.example
.env.testing

# Logs
storage/logs/*
*.log

# Cache
bootstrap/cache/*
storage/framework/cache/*
storage/framework/sessions/*
storage/framework/views/*

# Testing
tests/
phpunit.xml
.phpunit.result.cache

# IDE
.vscode/
.idea/
*.swp
*.swo

# OS
.DS_Store
Thumbs.db

# Git
.git/
.gitignore

# Documentation
README.md
DEPLOYMENT.md
```

## 🐛 Troubleshooting

### Build Fails
- Check that all environment variables are set
- Verify `APP_KEY` is properly generated
- Ensure database credentials are correct

### Database Connection Issues
- Verify database is accessible from Vercel
- Check firewall settings
- Ensure SSL is enabled if required

### CSS/Assets Not Loading
- Check that `npm run build` completed successfully
- Verify assets are in `public/build/` directory
- Clear browser cache

### 500 Errors
- Check Vercel function logs
- Verify all environment variables are set
- Run `php artisan config:clear` in function logs

## 📊 Monitoring

- **Function Logs:** Available in Vercel dashboard
- **Performance:** Monitor in Vercel Analytics
- **Errors:** Check Vercel function logs for PHP errors

## 🔄 Updates

To update your deployment:
1. Push changes to your main branch
2. Vercel will automatically redeploy
3. Check function logs for any issues

## 💡 Tips

- Use Vercel's built-in database for easier setup
- Monitor function execution time (10s limit on hobby plan)
- Consider upgrading to Pro plan for better performance
- Use Vercel's edge functions for better global performance

## 🆘 Support

- **Vercel Docs:** https://vercel.com/docs
- **Laravel on Vercel:** https://vercel.com/guides/deploying-laravel-to-vercel
- **Function Logs:** Available in Vercel dashboard under your project
