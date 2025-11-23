# Infrastructure Setup Instructions

This guide provides the necessary steps to configure your environment for the IaC setup.

## 1. Prerequisites

- A [Hetzner Cloud](https://www.hetzner.com/cloud) account.
- A [Cloudflare](https://www.cloudflare.com/) account with your domain (`intconnect.ro`) managed by it.
- A [GitHub](https://github.com/) account and a repository for your project.

## 2. Credentials Setup

### 2.1. Cloudflare API Token

1.  In your Cloudflare dashboard, go to **My Profile** > **API Tokens**.
2.  Click **Create Token** and use the **"Create Custom Token"** option.
3.  **Name your token** (e.g., `github-actions-terraform`).
4.  Grant it the following **Permissions**:
    *   `Zone` -> `DNS` -> `Edit`
    *   `Zone` -> `Zone` -> `Read`
5.  Under **Zone Resources**, select `Include` > `Specific zone` > `intconnect.ro`. This ensures the token can only affect that domain.
6.  Click **Continue to summary** and then **Create Token**.
7.  **Copy the generated token**. You will add this to GitHub secrets in a later step.

### 2.2. Hetzner API Token

1.  In your **Hetzner Cloud Console**, select your project.
2.  Go to **Security** (the shield icon on the left) and select the **API tokens** tab.
3.  Click **Generate API token**. Give it a descriptive name (e.g., `github-actions`) and assign it **Read & Write** permissions.
4.  **Immediately copy the generated token.** You will not be able to see it again.

### 2.3. Environment Configuration Files (.env)

For your application to work on the server, it needs its configuration and secrets (like database passwords). You will store these securely in GitHub secrets.

1.  **Generate APP_KEY:** Run `php artisan key:generate --show` in your local Laravel project's terminal. Copy the outputted key. This is a crucial application secret.

2.  **Create a production `.env` file:** On your local machine, make a copy of your `src/.env.example` file and name it `prod.env`. Fill it out with all the values for your **production** environment (e.g., `APP_ENV=production`, `APP_DEBUG=false`, your production database credentials, and paste the `APP_KEY` you just generated).
3.  **Create a staging `.env` file:** Make another copy and name it `stg.env`. Fill it out with the values for your **staging** environment (using a different `APP_KEY` for better security, or the same if preferred for simplicity in staging).

You will now copy the contents of these files into GitHub secrets.

### 2.4. GitHub Secrets

Navigate to your GitHub repository's **Settings** > **Secrets and variables** > **Actions** and add the following secrets:

*   `CLOUDFLARE_API_TOKEN`: The Cloudflare API Token you created.
*   `CLOUDFLARE_ACCOUNT_ID`: Your Cloudflare Account ID (find it on the right sidebar of the Cloudflare dashboard).
*   `HETZNER_TOKEN`: The Hetzner API token you generated.
*   `HETZNER_SSH_KEY_NAME`: A name for your SSH key in Hetzner, e.g., `github-actions-key`.
*   `ENV_FILE_PRODUCTION`: Copy the **entire contents** of your `prod.env` file and paste it here.
*   `ENV_FILE_STAGING`: Copy the **entire contents** of your `stg.env` file and paste it here.

## 3. SSH Key for Server Deployment

1.  Generate a new SSH key pair:
    ```bash
    ssh-keygen -t ed25519 -C "github-actions@intconnect.ro" -f ./github_actions_key
    ```
    Do not set a passphrase.

2.  This will create `github_actions_key` (private key) and `github_actions_key.pub` (public key).

3.  Add the **private key** as a GitHub secret:
    *   **Name**: `SSH_PRIVATE_KEY`
    *   **Value**: Copy the entire content of the `github_actions_key` file.

4.  Add the **public key** as a GitHub secret:
    *   **Name**: `SSH_PUBLIC_KEY`
    *   **Value**: Copy the entire content of the `github_actions_key.pub` file.

The public key will be automatically added to the Hetzner server by Terraform.

## 4. GitHub Actions Variables

Navigate to your GitHub repository's **Settings** > **Secrets and variables** > **Actions** and go to the **Variables** tab. Add the following:

*   `CLOUDFLARE_ZONE_ID`: The Zone ID of your `intconnect.ro` domain (find it on the domain's overview page in Cloudflare).
*   `HETZNER_SERVER_TYPE`: The server type to provision (e.g., `cpx11`).

## 5. Ready to Go!

Once the above setup is complete, the GitHub Actions workflow in `.github/workflows/pipeline.yml` will be able to run, provision infrastructure, and deploy your application.
