FROM curlimages/curl:8.16.0 AS pnpm-installer
RUN curl -fsSL https://get.pnpm.io/install.sh | ENV="$HOME/.shrc" SHELL="$(which sh)" PNPM_VERSION=10.18.3 sh -

FROM node:22.20-slim AS base
SHELL ["/bin/bash", "-c"]
WORKDIR /app
COPY --from=pnpm-installer /home/curl_user/.local/share/pnpm /root/.local/share/pnpm
ENV PATH="/root/.local/share/pnpm:$PATH"
COPY package.json /app/package.json
COPY pnpm-lock.yaml /app/pnpm-lock.yaml
RUN pnpm fetch
RUN pnpm install --prefer-offline --frozen-lockfile
