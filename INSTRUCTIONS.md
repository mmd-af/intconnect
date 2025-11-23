# Infrastructure & Deployment Setup Instructions

This guide provides all the necessary steps to configure your environment for the automated infrastructure and deployment pipeline. Follow these steps in order.

## Step 1: Set Up Terraform Cloud (The "Memory" for your Infrastructure)

This is the most important step to ensure your pipeline is stable. We will use the free tier of Terraform Cloud to store the "state" of your infrastructure, which prevents errors on subsequent runs.

1.  **Sign Up:** Go to [app.terraform.io](https://app.terraform.io) and sign up for a free account.
2.  **Create an Organization:** After signing up, you'll be prompted to create a new organization. Choose a name that is unique, for example `your-github-username-intconnect`.
    *   **IMPORTANT:** You must replace `YOUR_ORGANIZATION_NAME` in the `terraform/main.tf` file with the organization name you choose here.
3.  **Create an API Token:**
    *   Go to your user settings by clicking your profile icon in the top right, then **Settings**.
    *   Navigate to **Tokens** on the left menu.
    *   Click **Create an API token**.
    *   Give it a description (e.g., "GitHub Actions Token") and click **Create API token**.
    *   **Immediately copy the generated token.** You will not see it again. This will be used for a GitHub secret.

## Step 2: Generate Credentials from Cloud Providers

1.  **Hetzner API Token:**
    *   In your Hetzner Cloud Console, select your project, go to **Security** > **API tokens**.
    *   Click **Generate API token**, give it a name (`github-actions`), and assign **Read & Write** permissions.
    *   Copy the generated token.

2.  **Cloudflare API Token:**
    *   In your Cloudflare dashboard, go to **My Profile** > **API Tokens** > **Create Token**.
    *   Use the **Create Custom Token** template.
    *   Name it `github-actions-intconnect`.
    *   Grant it these permissions: `Zone` > `DNS` > `Edit`, and `Zone` > `Zone` > `Read`.
    *   Scope it to your specific zone: `Include` > `Specific zone` > `intconnect.ro`.
    *   Create the token and copy the value.

## Step 3: Generate Application Secrets

1.  **SSH Key for Server Deployment:**
    *   In your local terminal, run this command (do not set a passphrase):
        ```bash
        ssh-keygen -t ed25519 -C "github-actions@intconnect.ro" -f ./github_actions_key
        ```
    *   This creates two files: `github_actions_key` (your private key) and `github_actions_key.pub` (your public key).

2.  **Laravel Application Key (`APP_KEY`):**
    *   In your local terminal, inside your `src` directory, run `php artisan key:generate --show`.
    *   Copy the generated key (it starts with `base64:...`).

3.  **Create `prod.env` and `stg.env` files:**
    *   On your local machine, create two files, `prod.env` and `stg.env`.
    *   Fill them with all necessary values for production and staging, including unique, randomly-generated database passwords and the `APP_KEY` you just created.
    *   **Do not commit these files to Git.**

## Step 4: Configure GitHub Secrets & Variables

Navigate to your GitHub repository's **Settings** > **Secrets and variables** > **Actions**.

### Secrets

Add the following secrets. This is where you'll paste all the values you copied in the previous steps.

*   `TERRAFORM_CLOUD_TOKEN`: The API token you created in Terraform Cloud.
*   `HETZNER_TOKEN`: The API token from Hetzner.
*   `CLOUDFLARE_API_TOKEN`: The API token from Cloudflare.
*   `CLOUDFLARE_ACCOUNT_ID`: Your Cloudflare Account ID (find it on the right sidebar of the Cloudflare dashboard).
*   `SSH_PRIVATE_KEY`: The **entire content** of your `github_actions_key` file.
*   `SSH_PUBLIC_KEY`: The **entire content** of your `github_actions_key.pub` file.
*   `ENV_FILE_PRODUCTION`: The **entire content** of your `prod.env` file.
*   `ENV_FILE_STAGING`: The **entire content** of your `stg.env` file.
*   `HETZNER_SSH_KEY_NAME`: A name for your SSH key in Hetzner, e.g., `github-actions-key`.

### Variables

Add the following variables.

*   `CLOUDFLARE_ZONE_ID`: The Zone ID of your `intconnect.ro` domain from Cloudflare.
*   `HETZNER_SERVER_TYPE`: The server type you want (e.g., `cpx23`).

## Step 5: Ready to Go!

You are all set. Your next push to the `main` or `staging` branch will trigger the workflow, which will now run correctly and reliably every time.

