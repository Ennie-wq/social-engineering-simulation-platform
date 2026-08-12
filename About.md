# Social Engineering Simulation & Telemetry Platform

A reusable security-testing platform developed to support controlled
social-engineering simulations, phishing assessments, and security telemetry.

## Overview

Social engineering remains an important security risk because attackers can
target human decision-making rather than relying exclusively on technical
vulnerabilities.

During security assessments, I identified a recurring challenge: social-
engineering simulations were frequently assembled manually, making campaigns
difficult to reproduce, standardize, and measure consistently.

I therefore developed a reusable simulation and telemetry platform designed
to support controlled security assessments.

## Objectives

The project was designed to:

- Standardize social-engineering simulations
- Reduce repetitive assessment setup
- Provide consistent telemetry
- Support reusable simulation components
- Measure user interaction
- Improve assessment reporting

## Architecture

```text
                Test User
                    |
                    v
          Simulation Interface
                    |
                    v
             Backend Engine
                    |
          +---------+---------+
          |         |         |
          v         v         v
       Time      IP Data   User-Agent
          |         |         |
          +---------+---------+
                    |
                    v
             Telemetry Store
                    |
                    v
             Security Analysis
