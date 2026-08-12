# Architecture

## Overview

The platform consists of four primary components:

1. Simulation Interface
2. Backend Processing
3. Telemetry Collection
4. Assessment Analysis

## Data Flow

```text
User
 |
 v
Simulation Interface
 |
 v
HTTP Request
 |
 v
Backend Processing
 |
 +---- Timestamp
 |
 +---- IP Metadata
 |
 +---- User-Agent
 |
 +---- Request Metadata
 |
 v
Telemetry
 |
 v
Assessment Analysis
