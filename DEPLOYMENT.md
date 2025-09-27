# AIIMS Deoghar - Deployment Guide

## ⚠️ Important: Netlify Limitation

**This Laravel application cannot be deployed on Netlify** because:
- Netlify is designed for static sites (HTML, CSS, JS)
- Laravel is a PHP application that requires a server environment
- The application uses dynamic content (notices, events, jobs) that requires PHP and a database

## ✅ Recommended Hosting Solutions

### 1. Railway (Recommended)
**Best for beginners and quick deployment**

- **Website**: https://railway.app
- **Why**: Excellent Laravel support, easy setup, automatic deployments
- **Cost**: Free tier available, then pay-as-you-go
- **Setup**: Connect GitHub repo, Railway auto-detects Laravel

**Deployment Steps:**
1. Sign up at Railway.app
2. Connect your GitHub repository
3. Railway will auto-detect Laravel and set up the environment
4. Add environment variables (database, app key, etc.)
5. Deploy!

### 2. Heroku
**Popular platform with good Laravel support**

- **Website**: https://heroku.com
- **Why**: Mature platform, extensive documentation
- **Cost**: Free tier discontinued, paid plans start at $5/month
- **Setup**: Requires Procfile and some configuration

### 3. DigitalOcean App Platform
**Good balance of features and cost**

- **Website**: https://cloud.digitalocean.com/apps
- **Why**: Managed platform, good performance
- **Cost**: Starting at $5/month
- **Setup**: Connect GitHub, configure environment

### 4. Laravel Forge + VPS
**Most control and flexibility**

- **Website**: https://forge.laravel.com
- **Why**: Full control, optimized for Laravel
- **Cost**: $12/month for Forge + VPS costs
- **Setup**: More complex but most powerful

## 🚀 Quick Start with Railway

1. **Prepare your repository:**
   ```bash
   # Make sure your .env.example has all required variables
   # Ensure your database migrations are ready
   ```

2. **Deploy to Railway:**
   - Go to https://railway.app
   - Sign up with GitHub
   - Click "New Project" → "Deploy from GitHub repo"
   - Select your repository
   - Railway will auto-detect Laravel

3. **Configure environment variables:**
   - `APP_KEY` (generate with `php artisan key:generate`)
   - `DB_CONNECTION` (set to `mysql` or `postgresql`)
   - `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`
   - `APP_URL` (your Railway domain)

4. **Run migrations:**
   - In Railway dashboard, go to your service
   - Open the console and run: `php artisan migrate`

## 🔧 Alternative: Convert to Static Site

If you want to use Netlify, you would need to:

1. **Extract static content** from Laravel
2. **Convert Blade templates** to static HTML
3. **Use a headless CMS** for dynamic content
4. **Implement client-side routing**

This is a major refactor and not recommended for this project.

## 📋 Pre-deployment Checklist

- [ ] Environment variables configured
- [ ] Database migrations ready
- [ ] Storage permissions set (if using file uploads)
- [ ] SSL certificate configured
- [ ] Domain name pointed to hosting service
- [ ] Backup strategy in place

## 🆘 Need Help?

- **Railway Documentation**: https://docs.railway.app
- **Laravel Deployment Guide**: https://laravel.com/docs/deployment
- **Heroku Laravel Guide**: https://devcenter.heroku.com/articles/getting-started-with-laravel

## Current Status

✅ **Fixed**: Route configuration errors  
❌ **Cannot deploy**: On Netlify (PHP not supported)  
✅ **Ready**: For deployment on PHP-compatible hosting services
