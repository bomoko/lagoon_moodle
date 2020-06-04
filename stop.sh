#!/bin/bash

BUILD_NUMBER=1 DOCKER_REPO=algmprivsecops GIT_BRANCH=master make images_stop
BUILD_NUMBER=1 DOCKER_REPO=algmprivsecops GIT_BRANCH=master make images_remove