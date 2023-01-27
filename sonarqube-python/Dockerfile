FROM ubuntu:latest

LABEL maintainer "Raka Purusadhikara Putra"

ENV TZ=Asia/Jakarta
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

ARG SONARQUBE_SCANNER_CLI_VERSION="4.6.0.2311"

ENV SONARQUBE_SCANNER_HOME /opt/sonar-scanner-${SONARQUBE_SCANNER_CLI_VERSION}-linux
ENV SONARQUBE_SCANNER_BIN ${SONARQUBE_SCANNER_HOME}/bin
ENV SONAR_SCANNER_CLI_DOWNLOAD_URL "https://binaries.sonarsource.com/Distribution/sonar-scanner-cli/sonar-scanner-cli-${SONARQUBE_SCANNER_CLI_VERSION}-linux.zip"

RUN apt-get update \
	&& apt-get -y upgrade \
	&& apt-get install -y ca-certificates \
	&& update-ca-certificates \
        && apt-get install -y openjdk-11-jdk-headless tzdata unzip bash curl software-properties-common apt-transport-https \
	&& add-apt-repository ppa:deadsnakes/ppa \
        && apt-get install -y python3.7 python3-pip libpq-dev nodejs npm \
	&& rm -rf /var/cache/apt/* \
    && mkdir -p /tmp/sonar-scanner \
        && curl -L --silent ${SONAR_SCANNER_CLI_DOWNLOAD_URL} > /tmp/sonar-scanner/sonar-scanner-cli-${SONARQUBE_SCANNER_CLI_VERSION}-linux.zip \
    && mkdir -p /opt \
        && unzip /tmp/sonar-scanner/sonar-scanner-cli-${SONARQUBE_SCANNER_CLI_VERSION}-linux.zip -d /opt \
        && rm -rf /tmp/sonar-scanner

ENV PATH $PATH:$SONARQUBE_SCANNER_BIN

WORKDIR ${SONARQUBE_SCANNER_HOME}
